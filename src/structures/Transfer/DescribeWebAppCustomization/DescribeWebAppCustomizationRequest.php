<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWebAppCustomization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebAppId
 */
class DescribeWebAppCustomizationRequest extends Request
{
    /**
     * @param array{WebAppId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
