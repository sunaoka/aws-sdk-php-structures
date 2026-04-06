<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateKeyPair;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyName
 * @property bool|null $DryRun
 * @property 'rsa'|'ed25519'|null $KeyType
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property 'pem'|'ppk'|null $KeyFormat
 */
class CreateKeyPairRequest extends Request
{
    /**
     * @param array{
     *     KeyName: string,
     *     DryRun?: bool|null,
     *     KeyType?: 'rsa'|'ed25519'|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     KeyFormat?: 'pem'|'ppk'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
