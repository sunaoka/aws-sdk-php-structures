<?php

namespace Sunaoka\Aws\Structures\WorkDocs;

class WorkDocsClient extends \Aws\WorkDocs\WorkDocsClient
{
    use AbortDocumentVersionUpload\AbortDocumentVersionUploadTrait;
    use ActivateUser\ActivateUserTrait;
    use AddResourcePermissions\AddResourcePermissionsTrait;
    use CreateComment\CreateCommentTrait;
    use CreateCustomMetadata\CreateCustomMetadataTrait;
    use CreateFolder\CreateFolderTrait;
    use CreateLabels\CreateLabelsTrait;
    use CreateNotificationSubscription\CreateNotificationSubscriptionTrait;
    use CreateUser\CreateUserTrait;
    use DeactivateUser\DeactivateUserTrait;
    use DeleteComment\DeleteCommentTrait;
    use DeleteCustomMetadata\DeleteCustomMetadataTrait;
    use DeleteDocument\DeleteDocumentTrait;
    use DeleteDocumentVersion\DeleteDocumentVersionTrait;
    use DeleteFolder\DeleteFolderTrait;
    use DeleteFolderContents\DeleteFolderContentsTrait;
    use DeleteLabels\DeleteLabelsTrait;
    use DeleteNotificationSubscription\DeleteNotificationSubscriptionTrait;
    use DeleteUser\DeleteUserTrait;
    use DescribeActivities\DescribeActivitiesTrait;
    use DescribeComments\DescribeCommentsTrait;
    use DescribeDocumentVersions\DescribeDocumentVersionsTrait;
    use DescribeFolderContents\DescribeFolderContentsTrait;
    use DescribeGroups\DescribeGroupsTrait;
    use DescribeNotificationSubscriptions\DescribeNotificationSubscriptionsTrait;
    use DescribeResourcePermissions\DescribeResourcePermissionsTrait;
    use DescribeRootFolders\DescribeRootFoldersTrait;
    use DescribeUsers\DescribeUsersTrait;
    use GetCurrentUser\GetCurrentUserTrait;
    use GetDocument\GetDocumentTrait;
    use GetDocumentPath\GetDocumentPathTrait;
    use GetDocumentVersion\GetDocumentVersionTrait;
    use GetFolder\GetFolderTrait;
    use GetFolderPath\GetFolderPathTrait;
    use GetResources\GetResourcesTrait;
    use InitiateDocumentVersionUpload\InitiateDocumentVersionUploadTrait;
    use RemoveAllResourcePermissions\RemoveAllResourcePermissionsTrait;
    use RemoveResourcePermission\RemoveResourcePermissionTrait;
    use RestoreDocumentVersions\RestoreDocumentVersionsTrait;
    use SearchResources\SearchResourcesTrait;
    use UpdateDocument\UpdateDocumentTrait;
    use UpdateDocumentVersion\UpdateDocumentVersionTrait;
    use UpdateFolder\UpdateFolderTrait;
    use UpdateUser\UpdateUserTrait;
}
