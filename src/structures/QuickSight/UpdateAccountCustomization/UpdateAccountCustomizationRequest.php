<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAccountCustomization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $Namespace
 * @property Shapes\AccountCustomization $AccountCustomization
 */
class UpdateAccountCustomizationRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Namespace?: string,
     *     AccountCustomization: Shapes\AccountCustomization
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
