<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEmailAddressMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $EmailAddressId
 * @property string $Description
 * @property string $DisplayName
 * @property string $ClientToken
 */
class UpdateEmailAddressMetadataRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     EmailAddressId: string,
     *     Description?: string,
     *     DisplayName?: string,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
