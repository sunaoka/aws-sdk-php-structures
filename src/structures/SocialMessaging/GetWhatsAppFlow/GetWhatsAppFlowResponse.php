<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetWhatsAppFlow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $flowId
 * @property string $flowName
 * @property string $flowStatus
 * @property list<'SIGN_UP'|'SIGN_IN'|'APPOINTMENT_BOOKING'|'LEAD_GENERATION'|'SHOPPING'|'CONTACT_US'|'CUSTOMER_SUPPORT'|'SURVEY'|'OTHER'>|null $categories
 * @property list<string>|null $validationErrors
 * @property string|null $jsonVersion
 * @property string|null $dataApiVersion
 * @property string|null $endpointUri
 * @property Shapes\MetaFlowPreviewInfo|null $preview
 * @property Shapes\MetaFlowWhatsAppBusinessAccountInfo|null $whatsAppBusinessAccount
 * @property Shapes\MetaFlowApplicationInfo|null $application
 * @property Shapes\MetaFlowHealthStatus|null $healthStatus
 */
class GetWhatsAppFlowResponse extends Response
{
}
