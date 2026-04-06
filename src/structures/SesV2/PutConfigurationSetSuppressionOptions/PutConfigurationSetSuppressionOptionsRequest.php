<?php

namespace Sunaoka\Aws\Structures\SesV2\PutConfigurationSetSuppressionOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property list<'BOUNCE'|'COMPLAINT'>|null $SuppressedReasons
 * @property Shapes\SuppressionValidationOptions|null $ValidationOptions
 */
class PutConfigurationSetSuppressionOptionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     SuppressedReasons?: list<'BOUNCE'|'COMPLAINT'>|null,
     *     ValidationOptions?: Shapes\SuppressionValidationOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
