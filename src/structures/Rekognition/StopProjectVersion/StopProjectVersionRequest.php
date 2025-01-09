<?php

namespace Sunaoka\Aws\Structures\Rekognition\StopProjectVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectVersionArn
 */
class StopProjectVersionRequest extends Request
{
    /**
     * @param array{ProjectVersionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
