<?php

namespace Sunaoka\Aws\Structures\QApps;

class QAppsClient extends \Aws\QApps\QAppsClient
{
    use AssociateLibraryItemReview\AssociateLibraryItemReviewTrait;
    use AssociateQAppWithUser\AssociateQAppWithUserTrait;
    use CreateLibraryItem\CreateLibraryItemTrait;
    use CreateQApp\CreateQAppTrait;
    use DeleteLibraryItem\DeleteLibraryItemTrait;
    use DeleteQApp\DeleteQAppTrait;
    use DisassociateLibraryItemReview\DisassociateLibraryItemReviewTrait;
    use DisassociateQAppFromUser\DisassociateQAppFromUserTrait;
    use GetLibraryItem\GetLibraryItemTrait;
    use GetQApp\GetQAppTrait;
    use GetQAppSession\GetQAppSessionTrait;
    use ImportDocument\ImportDocumentTrait;
    use ListLibraryItems\ListLibraryItemsTrait;
    use ListQApps\ListQAppsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PredictQApp\PredictQAppTrait;
    use StartQAppSession\StartQAppSessionTrait;
    use StopQAppSession\StopQAppSessionTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateLibraryItem\UpdateLibraryItemTrait;
    use UpdateQApp\UpdateQAppTrait;
    use UpdateQAppSession\UpdateQAppSessionTrait;
}
