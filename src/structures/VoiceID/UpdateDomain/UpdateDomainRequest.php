<?php

namespace Sunaoka\Aws\Structures\VoiceID\UpdateDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $DomainId
 * @property string $Name
 * @property Shapes\ServerSideEncryptionConfiguration $ServerSideEncryptionConfiguration
 */
class UpdateDomainRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     DomainId: string,
     *     Name: string,
     *     ServerSideEncryptionConfiguration: Shapes\ServerSideEncryptionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
