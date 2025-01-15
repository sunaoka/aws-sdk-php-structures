<?php

namespace Sunaoka\Aws\Structures\XRay\CreateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string|null $FilterExpression
 * @property Shapes\InsightsConfiguration|null $InsightsConfiguration
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupName: string,
     *     FilterExpression?: string|null,
     *     InsightsConfiguration?: Shapes\InsightsConfiguration|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
