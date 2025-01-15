<?php

namespace Sunaoka\Aws\Structures\Rekognition\PutProjectPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectArn
 * @property string $PolicyName
 * @property string|null $PolicyRevisionId
 * @property string $PolicyDocument
 */
class PutProjectPolicyRequest extends Request
{
    /**
     * @param array{
     *     ProjectArn: string,
     *     PolicyName: string,
     *     PolicyRevisionId?: string|null,
     *     PolicyDocument: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
