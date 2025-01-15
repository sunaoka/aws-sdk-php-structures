<?php

namespace Sunaoka\Aws\Structures\Rekognition\DeleteProjectPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectArn
 * @property string $PolicyName
 * @property string|null $PolicyRevisionId
 */
class DeleteProjectPolicyRequest extends Request
{
    /**
     * @param array{
     *     ProjectArn: string,
     *     PolicyName: string,
     *     PolicyRevisionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
