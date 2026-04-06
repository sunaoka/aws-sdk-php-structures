<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRegistrationTypeDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceType
 * @property string|null $IsoCountryCode
 * @property 'ASSOCIATE_BEFORE_SUBMIT'|'ASSOCIATE_ON_APPROVAL'|'ASSOCIATE_AFTER_COMPLETE' $AssociationBehavior
 * @property 'DISASSOCIATE_ALL_CLOSES_REGISTRATION'|'DISASSOCIATE_ALL_ALLOWS_DELETE_REGISTRATION'|'DELETE_REGISTRATION_DISASSOCIATES' $DisassociationBehavior
 */
class SupportedAssociation extends Shape
{
    /**
     * @param array{
     *     ResourceType: string,
     *     IsoCountryCode?: string|null,
     *     AssociationBehavior: 'ASSOCIATE_BEFORE_SUBMIT'|'ASSOCIATE_ON_APPROVAL'|'ASSOCIATE_AFTER_COMPLETE',
     *     DisassociationBehavior: 'DISASSOCIATE_ALL_CLOSES_REGISTRATION'|'DISASSOCIATE_ALL_ALLOWS_DELETE_REGISTRATION'|'DELETE_REGISTRATION_DISASSOCIATES'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
