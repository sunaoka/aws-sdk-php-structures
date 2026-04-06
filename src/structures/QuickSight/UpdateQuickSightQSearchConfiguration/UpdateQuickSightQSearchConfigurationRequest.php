<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateQuickSightQSearchConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property 'ENABLED'|'DISABLED' $QSearchStatus
 */
class UpdateQuickSightQSearchConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     QSearchStatus: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
