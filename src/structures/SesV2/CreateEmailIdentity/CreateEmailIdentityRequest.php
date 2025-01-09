<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateEmailIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailIdentity
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\DkimSigningAttributes $DkimSigningAttributes
 * @property string $ConfigurationSetName
 */
class CreateEmailIdentityRequest extends Request
{
    /**
     * @param array{
     *     EmailIdentity: string,
     *     Tags?: list<Shapes\Tag>,
     *     DkimSigningAttributes?: Shapes\DkimSigningAttributes,
     *     ConfigurationSetName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
