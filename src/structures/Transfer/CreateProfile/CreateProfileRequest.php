<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $As2Id
 * @property 'LOCAL'|'PARTNER' $ProfileType
 * @property list<string> $CertificateIds
 * @property list<Shapes\Tag> $Tags
 */
class CreateProfileRequest extends Request
{
    /**
     * @param array{
     *     As2Id: string,
     *     ProfileType: 'LOCAL'|'PARTNER',
     *     CertificateIds?: list<string>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
