<?php

namespace Sunaoka\Aws\Structures\LicenseManager\UpdateLicenseSpecificationsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property list<Shapes\LicenseSpecification> $AddLicenseSpecifications
 * @property list<Shapes\LicenseSpecification> $RemoveLicenseSpecifications
 */
class UpdateLicenseSpecificationsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     AddLicenseSpecifications?: list<Shapes\LicenseSpecification>,
     *     RemoveLicenseSpecifications?: list<Shapes\LicenseSpecification>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
