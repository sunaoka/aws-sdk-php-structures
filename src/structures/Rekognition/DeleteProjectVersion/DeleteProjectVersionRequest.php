<?php

namespace Sunaoka\Aws\Structures\Rekognition\DeleteProjectVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectVersionArn
 */
class DeleteProjectVersionRequest extends Request
{
    /**
     * @param array{ProjectVersionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
