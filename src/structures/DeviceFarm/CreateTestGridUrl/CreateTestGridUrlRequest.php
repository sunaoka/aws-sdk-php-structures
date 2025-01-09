<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateTestGridUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectArn
 * @property int<60, 86400> $expiresInSeconds
 */
class CreateTestGridUrlRequest extends Request
{
    /**
     * @param array{
     *     projectArn: string,
     *     expiresInSeconds: int<60, 86400>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
