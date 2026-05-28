<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateServiceFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $serviceArn
 * @property string|null $description
 * @property 'PRIMARY'|'SUPPLEMENTAL' $criticality
 * @property string|null $clientToken
 */
class CreateServiceFunctionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     serviceArn: string,
     *     description?: string|null,
     *     criticality: 'PRIMARY'|'SUPPLEMENTAL',
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
