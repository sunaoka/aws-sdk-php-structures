<?php

namespace Sunaoka\Aws\Structures\Sns\SetTopicAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TopicArn
 * @property string $AttributeName
 * @property string|null $AttributeValue
 */
class SetTopicAttributesRequest extends Request
{
    /**
     * @param array{
     *     TopicArn: string,
     *     AttributeName: string,
     *     AttributeValue?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
