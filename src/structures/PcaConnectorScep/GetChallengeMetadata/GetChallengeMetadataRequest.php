<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\GetChallengeMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChallengeArn
 */
class GetChallengeMetadataRequest extends Request
{
    /**
     * @param array{ChallengeArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
