<?php

namespace Sunaoka\Aws\Structures\SignerData\GetRevocationStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $signatureTimestamp
 * @property string $platformId
 * @property string $profileVersionArn
 * @property string $jobArn
 * @property list<string> $certificateHashes
 */
class GetRevocationStatusRequest extends Request
{
    /**
     * @param array{
     *     signatureTimestamp: \Aws\Api\DateTimeResult,
     *     platformId: string,
     *     profileVersionArn: string,
     *     jobArn: string,
     *     certificateHashes: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
