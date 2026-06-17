<?php

namespace Sunaoka\Aws\Structures\Glue\PutFormType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Schema
 * @property string|null $ClientToken
 */
class PutFormTypeRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Schema: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
