<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $ApplicationArn
 * @property string $AppRegistryArn
 */
class GetApplicationRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId?: string,
     *     ApplicationArn?: string,
     *     AppRegistryArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
