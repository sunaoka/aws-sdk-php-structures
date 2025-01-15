<?php

namespace Sunaoka\Aws\Structures\signer\StartSigningJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Source $source
 * @property Shapes\Destination $destination
 * @property string $profileName
 * @property string $clientRequestToken
 * @property string|null $profileOwner
 */
class StartSigningJobRequest extends Request
{
    /**
     * @param array{
     *     source: Shapes\Source,
     *     destination: Shapes\Destination,
     *     profileName: string,
     *     clientRequestToken: string,
     *     profileOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
