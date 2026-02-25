<?php

namespace Sunaoka\Aws\Structures\ElementalInference\ListFeeds\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property FeedAssociation|null $association
 * @property 'CREATING'|'AVAILABLE'|'ACTIVE'|'UPDATING'|'DELETING'|'DELETED'|'ARCHIVED' $status
 */
class FeedSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     id: string,
     *     name: string,
     *     association?: FeedAssociation|null,
     *     status: 'CREATING'|'AVAILABLE'|'ACTIVE'|'UPDATING'|'DELETING'|'DELETED'|'ARCHIVED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
