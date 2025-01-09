<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportKeyPair;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 * @property string $KeyName
 * @property string $PublicKeyMaterial
 */
class ImportKeyPairRequest extends Request
{
    /**
     * @param array{
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool,
     *     KeyName: string,
     *     PublicKeyMaterial: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
