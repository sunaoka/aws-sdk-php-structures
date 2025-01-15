<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFpgaImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property Shapes\StorageLocation $InputStorageLocation
 * @property Shapes\StorageLocation|null $LogsStorageLocation
 * @property string|null $Description
 * @property string|null $Name
 * @property string|null $ClientToken
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateFpgaImageRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     InputStorageLocation: Shapes\StorageLocation,
     *     LogsStorageLocation?: Shapes\StorageLocation|null,
     *     Description?: string|null,
     *     Name?: string|null,
     *     ClientToken?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
