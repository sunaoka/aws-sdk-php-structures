<?php

namespace Sunaoka\Aws\Structures\SesV2\PutConfigurationSetSuppressionOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property list<'BOUNCE'|'COMPLAINT'> $SuppressedReasons
 */
class PutConfigurationSetSuppressionOptionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     SuppressedReasons?: list<'BOUNCE'|'COMPLAINT'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
