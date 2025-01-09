<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateTestGridUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectArn
 * @property int $expiresInSeconds
 */
class CreateTestGridUrlRequest extends Request
{
    /**
     * @param array{
     *     projectArn: string,
     *     expiresInSeconds: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
