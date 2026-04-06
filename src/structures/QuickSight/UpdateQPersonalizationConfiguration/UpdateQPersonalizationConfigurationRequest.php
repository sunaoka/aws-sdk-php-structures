<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateQPersonalizationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property 'ENABLED'|'DISABLED' $PersonalizationMode
 */
class UpdateQPersonalizationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     PersonalizationMode: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
