<?php

namespace Sunaoka\Aws\Structures\Emr\UpdateStudio;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StudioId
 * @property string $Name
 * @property string $Description
 * @property list<string> $SubnetIds
 * @property string $DefaultS3Location
 * @property string $EncryptionKeyArn
 */
class UpdateStudioRequest extends Request
{
    /**
     * @param array{
     *     StudioId: string,
     *     Name?: string,
     *     Description?: string,
     *     SubnetIds?: list<string>,
     *     DefaultS3Location?: string,
     *     EncryptionKeyArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
