<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\DeletePackagingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DeletePackagingConfigurationRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
