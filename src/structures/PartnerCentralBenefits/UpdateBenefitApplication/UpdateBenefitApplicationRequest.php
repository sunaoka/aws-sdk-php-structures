<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\UpdateBenefitApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $ClientToken
 * @property string|null $Name
 * @property string|null $Description
 * @property string $Identifier
 * @property string $Revision
 * @property Shapes\Document|null $BenefitApplicationDetails
 * @property list<Shapes\Contact>|null $PartnerContacts
 * @property list<Shapes\FileInput>|null $FileDetails
 */
class UpdateBenefitApplicationRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     ClientToken: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Identifier: string,
     *     Revision: string,
     *     BenefitApplicationDetails?: Shapes\Document|null,
     *     PartnerContacts?: list<Shapes\Contact>|null,
     *     FileDetails?: list<Shapes\FileInput>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
