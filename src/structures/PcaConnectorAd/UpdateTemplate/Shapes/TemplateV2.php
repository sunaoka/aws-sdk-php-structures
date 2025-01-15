<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CertificateValidity $CertificateValidity
 * @property EnrollmentFlagsV2 $EnrollmentFlags
 * @property ExtensionsV2 $Extensions
 * @property GeneralFlagsV2 $GeneralFlags
 * @property PrivateKeyAttributesV2 $PrivateKeyAttributes
 * @property PrivateKeyFlagsV2 $PrivateKeyFlags
 * @property SubjectNameFlagsV2 $SubjectNameFlags
 * @property list<string>|null $SupersededTemplates
 */
class TemplateV2 extends Shape
{
    /**
     * @param array{
     *     CertificateValidity: CertificateValidity,
     *     EnrollmentFlags: EnrollmentFlagsV2,
     *     Extensions: ExtensionsV2,
     *     GeneralFlags: GeneralFlagsV2,
     *     PrivateKeyAttributes: PrivateKeyAttributesV2,
     *     PrivateKeyFlags: PrivateKeyFlagsV2,
     *     SubjectNameFlags: SubjectNameFlagsV2,
     *     SupersededTemplates?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
