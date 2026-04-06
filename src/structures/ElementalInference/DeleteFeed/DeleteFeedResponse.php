<?php

namespace Sunaoka\Aws\Structures\ElementalInference\DeleteFeed;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property 'CREATING'|'AVAILABLE'|'ACTIVE'|'UPDATING'|'DELETING'|'DELETED'|'ARCHIVED' $status
 */
class DeleteFeedResponse extends Response
{
}
