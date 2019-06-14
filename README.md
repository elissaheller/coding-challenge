# Welcome Module

We’re excited about your interest in Forum One, and we’d like to see you demonstrate a bit of your experience and thought process to complete a Drupal coding challenge.

Please review the requirements below and complete the exercise. Working within an estimate is a common expectation for development tasks at Forum One, so if the work for this exercise will exceed 2 hours, please document any remaining requirements or concessions that were made to work within that constraint. If you would like to continue the work beyond the 2 hour window to demonstrate additional features this is entirely optional.

## Exercise Requirements
Please write a custom Drupal module that meets the following requirements:

* When viewing the page as an authenticated user, the following content is displayed in the sidebar:
> “Hello {username}!
> 
> Your last log in was {login date}.
> 
>Visit your profile”
* The logged in user’s username should be displayed instead of “{username}”.
* The {login date} should reflect the user’s last login.
* The {login date} should be formatted as: December 21st, 2012 12:01 am
* The words “Visit your profile” should link to the user’s profile page.
* If a user is not logged in while viewing the page, nothing should display in the sidebar.

### Extra Credit
An administrator should be able to optionally configure a custom plain-text welcome message to display below the profile link. This welcome text should be the same for all authenticated users and will not display for unauthenticated users.

## Rules
While completing this exercise, you may reference the Drupal API on drupal.org or other how-tos available online. Please do not get individual help from someone else. The work presented should be your own. 

## Assumptions
* This module may be written for Drupal 8 (preferred) or Drupal 7
* The module should function within a default Drupal installation using the Standard install profile
* The Drupal environment will use Bartik as the theme
* Your module and any noted dependencies will be installed
* Any manual setup instructions should be documented

## Evaluation and Considerations
During our interview, we will ask some follow up questions relating to this exercise to inform our evaluation of your candidacy. To aid your preparation, please note that the questions will focus on the following:

* Thought process for your solution
* Opportunities for improvement or iteration
* Solutions that may have been explored but ruled out
* Alternative approaches that may have been better or worse in hindsight

## Completion and Delivery
Please deliver it to Forum One as a fork of this repository on GitHub.

Email the following to Kari Inch (kinch@forumone.com):
* A link to your repository
* A screenshot of the content being displayed
* Any additional information for consideration while reviewing the work
