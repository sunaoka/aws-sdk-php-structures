<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateServiceFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 * @property string $serviceFunctionId
 * @property string|null $name
 * @property string|null $description
 * @property 'PRIMARY'|'SUPPLEMENTAL'|null $criticality
 */
class UpdateServiceFunctionRequest extends Request
{
    /**
     * @param array{
     *     serviceArn: string,
     *     serviceFunctionId: string,
     *     name?: string|null,
     *     description?: string|null,
     *     criticality?: 'PRIMARY'|'SUPPLEMENTAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
