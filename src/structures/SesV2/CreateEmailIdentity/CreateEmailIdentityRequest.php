<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateEmailIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailIdentity
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\DkimSigningAttributes|null $DkimSigningAttributes
 * @property string|null $ConfigurationSetName
 */
class CreateEmailIdentityRequest extends Request
{
    /**
     * @param array{
     *     EmailIdentity: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     DkimSigningAttributes?: Shapes\DkimSigningAttributes|null,
     *     ConfigurationSetName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
