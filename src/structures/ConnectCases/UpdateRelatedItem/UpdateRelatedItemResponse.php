<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateRelatedItem;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $relatedItemId
 * @property string $relatedItemArn
 * @property 'Contact'|'Comment'|'File'|'Sla'|'ConnectCase'|'Custom' $type
 * @property Shapes\RelatedItemContent $content
 * @property \Aws\Api\DateTimeResult $associationTime
 * @property array<string, string>|null $tags
 * @property Shapes\UserUnion|null $lastUpdatedUser
 * @property Shapes\UserUnion|null $createdBy
 */
class UpdateRelatedItemResponse extends Response
{
}
