<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAccountCustomization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $Namespace
 * @property Shapes\AccountCustomization $AccountCustomization
 * @property list<Shapes\Tag> $Tags
 */
class CreateAccountCustomizationRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Namespace?: string,
     *     AccountCustomization: Shapes\AccountCustomization,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
