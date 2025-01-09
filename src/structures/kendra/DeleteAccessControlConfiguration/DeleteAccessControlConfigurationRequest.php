<?php

namespace Sunaoka\Aws\Structures\kendra\DeleteAccessControlConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $Id
 */
class DeleteAccessControlConfigurationRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     Id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
