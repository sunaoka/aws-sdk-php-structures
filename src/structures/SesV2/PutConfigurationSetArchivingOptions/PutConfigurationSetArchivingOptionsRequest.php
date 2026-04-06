<?php

namespace Sunaoka\Aws\Structures\SesV2\PutConfigurationSetArchivingOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property string|null $ArchiveArn
 */
class PutConfigurationSetArchivingOptionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     ArchiveArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
