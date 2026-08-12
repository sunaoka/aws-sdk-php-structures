<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDlpSetting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecretArn
 */
class MicrosoftPurviewCredentials extends Shape
{
    /**
     * @param array{SecretArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
