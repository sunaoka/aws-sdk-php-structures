<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateResiliencyGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resiliencyGroupName
 * @property 'maximum-resiliency'|'high-resiliency'|'basic-resiliency' $intendedResiliencyModel
 * @property string|null $clientToken
 * @property list<Shapes\Tag>|null $tags
 */
class CreateResiliencyGroupRequest extends Request
{
    /**
     * @param array{
     *     resiliencyGroupName: string,
     *     intendedResiliencyModel: 'maximum-resiliency'|'high-resiliency'|'basic-resiliency',
     *     clientToken?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
