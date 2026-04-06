<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportKeyPair;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $KeyName
 * @property string|resource|\Psr\Http\Message\StreamInterface $PublicKeyMaterial
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class ImportKeyPairRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     KeyName: string,
     *     PublicKeyMaterial: string|resource|\Psr\Http\Message\StreamInterface,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
