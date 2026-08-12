<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDlpSetting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MicrosoftPurviewProviderConfig|null $MicrosoftPurview
 */
class ProviderConfig extends Shape
{
    /**
     * @param array{MicrosoftPurview?: MicrosoftPurviewProviderConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
