<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CertificateValidity $CertificateValidity
 * @property EnrollmentFlagsV3 $EnrollmentFlags
 * @property ExtensionsV3 $Extensions
 * @property GeneralFlagsV3 $GeneralFlags
 * @property 'SHA256'|'SHA384'|'SHA512' $HashAlgorithm
 * @property PrivateKeyAttributesV3 $PrivateKeyAttributes
 * @property PrivateKeyFlagsV3 $PrivateKeyFlags
 * @property SubjectNameFlagsV3 $SubjectNameFlags
 * @property list<string>|null $SupersededTemplates
 */
class TemplateV3 extends Shape
{
    /**
     * @param array{
     *     CertificateValidity: CertificateValidity,
     *     EnrollmentFlags: EnrollmentFlagsV3,
     *     Extensions: ExtensionsV3,
     *     GeneralFlags: GeneralFlagsV3,
     *     HashAlgorithm: 'SHA256'|'SHA384'|'SHA512',
     *     PrivateKeyAttributes: PrivateKeyAttributesV3,
     *     PrivateKeyFlags: PrivateKeyFlagsV3,
     *     SubjectNameFlags: SubjectNameFlagsV3,
     *     SupersededTemplates?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
