<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateResourceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property int $sensitivityScoreOverride
 */
class UpdateResourceProfileRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     sensitivityScoreOverride?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
