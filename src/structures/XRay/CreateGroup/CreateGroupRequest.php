<?php

namespace Sunaoka\Aws\Structures\XRay\CreateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $FilterExpression
 * @property Shapes\InsightsConfiguration $InsightsConfiguration
 * @property list<Shapes\Tag> $Tags
 */
class CreateGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupName: string,
     *     FilterExpression?: string,
     *     InsightsConfiguration?: Shapes\InsightsConfiguration,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
