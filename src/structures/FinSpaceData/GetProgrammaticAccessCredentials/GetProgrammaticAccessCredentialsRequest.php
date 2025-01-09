<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetProgrammaticAccessCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $durationInMinutes
 * @property string $environmentId
 */
class GetProgrammaticAccessCredentialsRequest extends Request
{
    /**
     * @param array{
     *     durationInMinutes?: int,
     *     environmentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
