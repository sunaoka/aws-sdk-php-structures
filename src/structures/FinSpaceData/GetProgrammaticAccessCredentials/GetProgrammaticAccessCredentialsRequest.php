<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetProgrammaticAccessCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 60>|null $durationInMinutes
 * @property string $environmentId
 */
class GetProgrammaticAccessCredentialsRequest extends Request
{
    /**
     * @param array{
     *     durationInMinutes?: int<1, 60>|null,
     *     environmentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
