<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ApplicationId
 * @property string|null $ApplicationArn
 * @property string|null $AppRegistryArn
 */
class GetApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId?: string|null,
     *     ApplicationArn?: string|null,
     *     AppRegistryArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
