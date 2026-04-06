<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Source'|'Build'|'Deploy'|'Test'|'Invoke'|'Approval'|'Compute' $category
 * @property 'AWS'|'ThirdParty'|'Custom' $owner
 * @property string $provider
 * @property string $version
 */
class ActionTypeId extends Shape
{
    /**
     * @param array{
     *     category: 'Source'|'Build'|'Deploy'|'Test'|'Invoke'|'Approval'|'Compute',
     *     owner: 'AWS'|'ThirdParty'|'Custom',
     *     provider: string,
     *     version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
