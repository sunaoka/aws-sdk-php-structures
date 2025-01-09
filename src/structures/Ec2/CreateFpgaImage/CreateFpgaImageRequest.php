<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFpgaImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property Shapes\StorageLocation $InputStorageLocation
 * @property Shapes\StorageLocation $LogsStorageLocation
 * @property string $Description
 * @property string $Name
 * @property string $ClientToken
 * @property list<Shapes\TagSpecification> $TagSpecifications
 */
class CreateFpgaImageRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     InputStorageLocation: Shapes\StorageLocation,
     *     LogsStorageLocation?: Shapes\StorageLocation,
     *     Description?: string,
     *     Name?: string,
     *     ClientToken?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
