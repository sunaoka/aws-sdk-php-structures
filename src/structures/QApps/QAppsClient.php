<?php

namespace Sunaoka\Aws\Structures\QApps;

class QAppsClient extends \Aws\QApps\QAppsClient
{
    use AssociateLibraryItemReview\AssociateLibraryItemReviewTrait;
    use AssociateQAppWithUser\AssociateQAppWithUserTrait;
    use BatchCreateCategory\BatchCreateCategoryTrait;
    use BatchDeleteCategory\BatchDeleteCategoryTrait;
    use BatchUpdateCategory\BatchUpdateCategoryTrait;
    use CreateLibraryItem\CreateLibraryItemTrait;
    use CreatePresignedUrl\CreatePresignedUrlTrait;
    use CreateQApp\CreateQAppTrait;
    use DeleteLibraryItem\DeleteLibraryItemTrait;
    use DeleteQApp\DeleteQAppTrait;
    use DescribeQAppPermissions\DescribeQAppPermissionsTrait;
    use DisassociateLibraryItemReview\DisassociateLibraryItemReviewTrait;
    use DisassociateQAppFromUser\DisassociateQAppFromUserTrait;
    use ExportQAppSessionData\ExportQAppSessionDataTrait;
    use GetLibraryItem\GetLibraryItemTrait;
    use GetQApp\GetQAppTrait;
    use GetQAppSession\GetQAppSessionTrait;
    use GetQAppSessionMetadata\GetQAppSessionMetadataTrait;
    use ImportDocument\ImportDocumentTrait;
    use ListCategories\ListCategoriesTrait;
    use ListLibraryItems\ListLibraryItemsTrait;
    use ListQAppSessionData\ListQAppSessionDataTrait;
    use ListQApps\ListQAppsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PredictQApp\PredictQAppTrait;
    use StartQAppSession\StartQAppSessionTrait;
    use StopQAppSession\StopQAppSessionTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateLibraryItem\UpdateLibraryItemTrait;
    use UpdateLibraryItemMetadata\UpdateLibraryItemMetadataTrait;
    use UpdateQApp\UpdateQAppTrait;
    use UpdateQAppPermissions\UpdateQAppPermissionsTrait;
    use UpdateQAppSession\UpdateQAppSessionTrait;
    use UpdateQAppSessionMetadata\UpdateQAppSessionMetadataTrait;
}
