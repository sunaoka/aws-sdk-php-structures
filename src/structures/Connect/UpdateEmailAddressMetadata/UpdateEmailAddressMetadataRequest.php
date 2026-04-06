<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEmailAddressMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $EmailAddressId
 * @property string|null $Description
 * @property string|null $DisplayName
 * @property string|null $ClientToken
 */
class UpdateEmailAddressMetadataRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     EmailAddressId: string,
     *     Description?: string|null,
     *     DisplayName?: string|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
