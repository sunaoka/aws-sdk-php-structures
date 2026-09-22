<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\UpdateIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $authCode
 */
class OAuthCodeCredential extends Shape
{
    /**
     * @param array{authCode: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
