<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAccountCustomization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string|null $Namespace
 * @property Shapes\AccountCustomization $AccountCustomization
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateAccountCustomizationRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Namespace?: string|null,
     *     AccountCustomization: Shapes\AccountCustomization,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
