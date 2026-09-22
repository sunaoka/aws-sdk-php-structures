<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\UpdateIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clientId
 * @property string $clientSecret
 * @property string|null $providerId
 */
class OAuthClientCredential extends Shape
{
    /**
     * @param array{
     *     clientId: string,
     *     clientSecret: string,
     *     providerId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
